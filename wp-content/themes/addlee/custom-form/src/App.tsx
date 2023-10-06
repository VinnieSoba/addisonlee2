import React, { useState } from "react";
import { SearchField, FormDescription } from "./components";
import { ICompanyModel } from "./models";
import CompanyDetailsForm from "./forms/CompanyDetailsForm";
import ContactDetailsForm from "./forms/ContactDetailsForm";
import { ICompanyDetailsFormData, IContactDetailsFormData } from "./types";
import { AppMapper } from "./App.mapper";
import api from "./api";
import { FORM_STEP } from "./consts";
import { useToggle } from "./utils";
import { redirectPageBasedOnRecomendation } from "./App.utils";

export const App = () => {
  const [formStep, setFormStep] = useState<FORM_STEP>(FORM_STEP.USER_DETAILS);
  const [contactDetails, setContactDetails] = useState<IContactDetailsFormData>(
    null
  );
  const [suggestion, setSuggestion] = useState<ICompanyModel>(undefined);
  const [
    searchByCompanyName,
    toggleSearchByCompanyName,
    setSearchByCompanyName,
  ] = useToggle(true);

  const handleContactDetailsSubmit = (
    submittedData: IContactDetailsFormData
  ) => {
    setFormStep(FORM_STEP.SEARCH);
    setContactDetails(submittedData);
  };

  const handleSuggestionChange = (suggestion: ICompanyModel) => {
    setSuggestion(suggestion);
    setFormStep(FORM_STEP.COMPANY_DETAILS);
  };

  const handleSelectForeignCompanyForm = () => {
    setSuggestion(undefined);
    setFormStep(FORM_STEP.COMPANY_DETAILS);
  };

  const handleSearchAgain = (searchWithCompanyName?: boolean) => {
    setSearchByCompanyName(searchWithCompanyName);
    setFormStep(FORM_STEP.SEARCH);
  };

  const handleCompanyDetailsSubmit = (
    companyDetails: ICompanyDetailsFormData
  ) => {
    const mappedFormData = AppMapper.mapFormDataToDto(
      suggestion,
      contactDetails,
      companyDetails
    );

    api
      .sendBusinessAccountFormData(mappedFormData)
      .then(({ data: responseData }) => {
        const { recommendation } = responseData;
        redirectPageBasedOnRecomendation(recommendation);
      })
      .catch(() => {
        redirectPageBasedOnRecomendation();
      });
  };

  return (
    <div className="banner-content wow fadeInUp">
      <FormDescription formStep={formStep} />
      <div className="gform_wrapper">
        {formStep === FORM_STEP.USER_DETAILS && (
          <ContactDetailsForm onSubmit={handleContactDetailsSubmit} />
        )}

        {formStep === FORM_STEP.SEARCH && (
          <SearchField
            onChange={handleSuggestionChange}
            onSelectForeignCompanyForm={handleSelectForeignCompanyForm}
            searchByCompanyName={searchByCompanyName}
            onSearchMethodToggle={toggleSearchByCompanyName}
          />
        )}

        {formStep === FORM_STEP.COMPANY_DETAILS && (
          <CompanyDetailsForm
            company={suggestion}
            contactDetails={contactDetails}
            onSearchAgain={handleSearchAgain}
            onSubmit={handleCompanyDetailsSubmit}
          />
        )}
      </div>
    </div>
  );
};
