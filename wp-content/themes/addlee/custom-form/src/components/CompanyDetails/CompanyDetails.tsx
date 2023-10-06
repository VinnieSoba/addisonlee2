import React, { memo } from "react";
import { Control, UseFormGetValues, UseFormRegister } from "react-hook-form";
import FieldValidationMessage from "../FieldValidationMessage";
import { ICompanyModel } from "../../models";
import BillingAddressSection from "./BillingAddressSection";
import CompanyContactForm from "../../forms/CompanyContactForm";
import FloatingActionLink from "../FloatingActionLink";
import { useToggle } from "../../utils";

interface IProps {
  company?: ICompanyModel;
  fieldRegister: UseFormRegister<any>;
  getFormValues: UseFormGetValues<any>;
  formController: Control<any>;
  errors: any;
}

const CompanyDetails = ({
  company,
  fieldRegister,
  getFormValues,
  formController,
  errors,
}: IProps) => {
  const isForeignCompanyForm = !company;
  const [isEditingDetails, toggleIsEditingDetails] = useToggle();
  const displayTextInformation = !isForeignCompanyForm && !isEditingDetails;
  const detailsFormError =
    errors["city"] ||
    errors["postalCode"] ||
    errors["streetAddress"] ||
    errors["country"];

  return (
    <>
      <div style={{ marginTop: "40px" }} />

      {!isForeignCompanyForm && (
        <>
          <FloatingActionLink onClick={toggleIsEditingDetails}>
            {isEditingDetails ? "Done" : "Edit billing address"}
          </FloatingActionLink>
          <h4 style={{ textAlign: "left" }}>Billing Address</h4>
        </>
      )}
      {displayTextInformation ? (
        <BillingAddressSection
          postalCode={getFormValues("postalCode")}
          address={getFormValues("streetAddress")}
          city={getFormValues("city")}
        />
      ) : (
        <CompanyContactForm
          company={company}
          fieldRegister={fieldRegister}
          formController={formController}
        />
      )}
      {!!detailsFormError && (
        <FieldValidationMessage validationError={detailsFormError} />
      )}
    </>
  );
};

export default memo(CompanyDetails);
