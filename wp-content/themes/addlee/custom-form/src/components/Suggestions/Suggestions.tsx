import React, { memo } from "react";
import { StyledWrapper } from "./Suggestions.styles";
import SingleSuggestion from "./SingleSuggestion";
import { ICompanyModel } from "../../models";

interface IProps {
  searchedValue?: string;
  suggestions: ICompanyModel[];
  onChange?: (suggestion: ICompanyModel) => void;
}

const Suggestions = ({ searchedValue, suggestions = [], onChange }: IProps) => {
  return (
    <StyledWrapper className="autocomplete-suggestions">
      {suggestions.map((suggestion) => (
        <SingleSuggestion
          suggestion={suggestion}
          onClick={onChange}
          searchedValue={searchedValue}
        />
      ))}
    </StyledWrapper>
  );
};

export default memo(Suggestions);
