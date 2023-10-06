import React, { AnchorHTMLAttributes, memo } from "react";

const hrefThatDoesNothing = "javascript:void(0)";

interface IProps extends AnchorHTMLAttributes<HTMLAnchorElement> {
  children: React.ReactNode;
}

const ActionLink = ({ children, ...passedProps }: IProps) => {
  return (
    <a href={hrefThatDoesNothing} {...passedProps}>
      {children}
    </a>
  );
};

export default memo(ActionLink);
