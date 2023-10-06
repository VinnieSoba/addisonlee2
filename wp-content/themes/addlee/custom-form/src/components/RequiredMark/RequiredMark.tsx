import React, { memo } from "react";

interface IProps {}

const RequiredMark = ({}: IProps) => {
  return <span className="gfield_required">*</span>;
};

export default memo(RequiredMark);
