import React, { memo, useMemo } from "react";
import { useForm, Controller } from "react-hook-form";
import { getCompanyDetailsFormSchema } from "./CompanyDetailsForm.schema";
import { useYupValidationResolver } from "../../utils";
import { Checkbox, Link, CompanyDetails, Form } from "../../components";
import CompanyNameField from "./CompanyNameField";
import { ICompanyModel } from "../../models";
import { IContactDetailsFormData, ICompanyDetailsFormData } from "../../types";
import SearchAgainByRegNumber from "./SearchAgainByRegNumber";
import YourDetailsList from "./YourDetailsList";
import { CompanyDetailsFormUtils } from "./CompanyDetailsForm.utils";

interface IProps {
  company?: ICompanyModel;
  contactDetails?: IContactDetailsFormData;
  onSubmit?: (subbmitedData: ICompanyDetailsFormData) => void;
  onSearchAgain: (searchWithCompanyName?: boolean) => void;
}

const CompanyDetailsForm = ({
  company,
  contactDetails,
  onSearchAgain,
  onSubmit,
}: IProps) => {
  const isForeignCompanyForm = useMemo(() => !company, [company]);
  const resolver = useYupValidationResolver(
    getCompanyDetailsFormSchema(!isForeignCompanyForm)
  );

  const {
    register,
    control,
    handleSubmit,
    getValues,
    formState: { errors },
  } = useForm({
    resolver,
    defaultValues: CompanyDetailsFormUtils.getDefaultFormData(company),
  });

  const openSearchWithCompanyName = () => {
    onSearchAgain(true);
  };

  const openSearchWithRegNumber = () => {
    onSearchAgain(false);
  };

  return (
    <Form onSubmit={handleSubmit(onSubmit)} noValidate withSubmitButton>
      {!isForeignCompanyForm && (
        <SearchAgainByRegNumber onClick={openSearchWithRegNumber} />
      )}
      <CompanyNameField
        company={company}
        onSearchAgain={openSearchWithCompanyName}
        fieldRegister={register}
      />
      <CompanyDetails
        company={company}
        fieldRegister={register}
        errors={errors}
        getFormValues={getValues}
        formController={control}
      />
      <YourDetailsList contactDetails={contactDetails} />
      <Controller
        control={control}
        name="termsAcceptance"
        render={({ field: { onChange, value, name } }) => (
          <Checkbox
            name={name}
            checked={value}
            onChange={(event) => onChange(event.target.checked)}
            errors={errors}
            required
          >
            By ticking this box you the customer: i) confirm that you have read
            and agree to Addison Lee{" "}
            <Link href="/terms/">Terms and Conditions of Trading</Link> being
            incorporated in and forming part of every contract for services, ii)
            agree to pay the charges and priority fee as invoiced by Addison
            Lee, and iii) confirm your permission to run a credit check.
          </Checkbox>
        )}
      />
    </Form>
  );
};

export default memo(CompanyDetailsForm);
