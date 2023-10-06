import React, { memo } from "react";

interface IProps {
  children: React.ReactNode;
}

const SectionTitle = ({ children }: IProps) => {
  return (
    <li className="gfield gsection field_sublabel_below field_description_below gfield_visibility_visible">
      <h2 className="gsection_title">{children}</h2>
    </li>
  );
};

export default memo(SectionTitle);
