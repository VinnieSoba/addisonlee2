import React, { memo } from "react";
import { IContactDetailsFormData } from "../../types";
import { DetailsList } from "../../components";

interface IProps {
  contactDetails: IContactDetailsFormData;
}

const YourDetailsList = ({ contactDetails }: IProps) => {
  const {
    title,
    firstName,
    lastName,
    businessEmail,
    businessPhoneNumber,
  } = contactDetails;

  return (
    <DetailsList title="Your details" style={{ marginTop: "40px" }}>
      <div>{`${title} ${firstName} ${lastName}`}</div>
      <div>{businessEmail}</div>
      <div>{businessPhoneNumber}</div>
    </DetailsList>
  );
};

export default memo(YourDetailsList);
