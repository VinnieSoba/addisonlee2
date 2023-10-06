import React, { memo } from "react";
import cn from "classnames";
import { ICompanyModel } from "../../models";
import { getSuggestionHtml } from "./SingleSuggestion.utils";
import { useToggle } from "../../utils";

interface IProps {
  searchedValue?: string;
  suggestion: ICompanyModel;
  onClick: (suggestion: ICompanyModel) => void;
}

const SingleSuggestion = ({ searchedValue, suggestion, onClick }: IProps) => {
  const [isHovered, toggleIsHover] = useToggle();
  const suggestionClassName = cn("autocomplete-suggestion", {
    selected: isHovered,
  });
  const suggestionHtml = getSuggestionHtml(suggestion, searchedValue);

  const handleClick = () => {
    onClick(suggestion);
  };

  return (
    <div
      className={suggestionClassName}
      onClick={handleClick}
      onMouseEnter={toggleIsHover}
      onMouseLeave={toggleIsHover}
      dangerouslySetInnerHTML={{ __html: suggestionHtml }}
    />
  );
};

export default memo(SingleSuggestion);
