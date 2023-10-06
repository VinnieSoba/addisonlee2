import { ICompanyModel } from "../../models";

export const getValueToDisplay = (suggestion: ICompanyModel): string => {
  const {
    primaryName,
    primaryAddress: {
      streetAddress: { line1: streetAddress },
      postalCode,
    },
  } = suggestion;

  return `${primaryName}, ${streetAddress}, ${postalCode}`;
};

export const getSuggestionHtml = (
  suggestion: ICompanyModel,
  searchedValue: string
): string => {
  const valueToDisplay = getValueToDisplay(suggestion);
  const searchedValueRegex = new RegExp(`${searchedValue}`, "gi");
  const suggestionHtml = valueToDisplay.replace(
    searchedValueRegex,
    (replacedValue) => `<b>${replacedValue}</b>`
  );

  return suggestionHtml;
};
