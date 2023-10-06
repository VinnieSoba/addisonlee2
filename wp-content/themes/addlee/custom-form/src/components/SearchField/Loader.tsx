import React, { memo } from "react";
import { StyledWrapper } from "./Loader.styles";

interface IProps {}

const Loader = ({}: IProps) => {
  return <StyledWrapper className="loader" />;
};

export default memo(Loader);
