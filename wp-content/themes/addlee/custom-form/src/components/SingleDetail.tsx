import React, { memo } from "react";

interface IProps {
  label?: string;
}

const SingleDetail = ({ label }: IProps) => {
  return !!label && <div>{label}</div>;
};

export default memo(SingleDetail);
