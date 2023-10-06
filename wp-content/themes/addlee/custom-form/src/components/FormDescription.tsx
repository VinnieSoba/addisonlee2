import React, { memo, useMemo } from "react";
import Description from "./Description";
import {
  FORM_STEP,
  CONTACT_FORM_DESCRIPTION,
  COMPANY_DETAILS_FORM_DESCRIPTION,
} from "../consts";

interface IProps {
  formStep: FORM_STEP;
}

const FormDescription = ({ formStep }: IProps) => {
  const formDescription = useMemo(
    () =>
      formStep === FORM_STEP.USER_DETAILS
        ? CONTACT_FORM_DESCRIPTION
        : COMPANY_DETAILS_FORM_DESCRIPTION,
    [formStep]
  );

  return <Description>{formDescription}</Description>;
};

export default memo(FormDescription);
