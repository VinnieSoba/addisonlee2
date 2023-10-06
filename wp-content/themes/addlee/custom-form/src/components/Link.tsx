import React, { AnchorHTMLAttributes, memo } from "react";

interface IProps extends AnchorHTMLAttributes<HTMLAnchorElement> {
  children: React.ReactNode;
}

const Link = ({ children, ...passedProps }: IProps) => {
  return (
    <a target="_blank" className="ajax-page-content" {...passedProps}>
      {children}
    </a>
  );
};

export default memo(Link);
