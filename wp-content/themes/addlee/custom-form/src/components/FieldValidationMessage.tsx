import React, { memo } from "react";

interface IProps {
  validationError:
    | undefined
    | {
        type: string;
        message: string;
      };
}

const FieldValidationMessage = ({ validationError }: IProps) => {
  return (
    validationError && (
      <div
        className="gfield_description validation_message"
        style={{ textAlign: "left" }}
      >
        {validationError.message}
      </div>
    )
  );
};

export default memo(FieldValidationMessage);
