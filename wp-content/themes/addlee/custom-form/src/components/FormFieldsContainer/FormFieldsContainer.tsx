import React, { memo } from "react";

interface IProps {
  children: React.ReactChild[];
}

const FormFieldsContainer = ({ children }: IProps) => {
  return (
    <ul className="gform_fields left_label form_sublabel_below description_below">
      {children}
    </ul>
  );
};

export default memo(FormFieldsContainer);
