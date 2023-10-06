import React, { HTMLProps, memo } from "react";
import { StyledWrapper, StyledIcon } from "./CloseButton.styles";

interface IProps extends HTMLProps<HTMLElement> {}

const CloseButton = ({ onClick }: IProps) => {
  return (
    <StyledWrapper onClick={onClick}>
      <StyledIcon className="icon-cancel" />
    </StyledWrapper>
  );
};

export default memo(CloseButton);
