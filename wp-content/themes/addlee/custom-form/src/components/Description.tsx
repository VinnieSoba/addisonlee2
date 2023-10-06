import React, { memo } from "react";

interface IProps {
  children: React.ReactChild | React.ReactChildren;
}

const Description = ({ children }: IProps) => {
  return <p>{children}</p>;
};

export default memo(Description);
