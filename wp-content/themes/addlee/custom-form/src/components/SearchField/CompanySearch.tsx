import React, {
  InputHTMLAttributes,
  memo,
  useEffect,
  useState,
  useMemo,
} from "react";
import isEmpty from "lodash/isEmpty";
import uniqueString from "unique-string";
import ActionLink from "../ActionLink";
import InputLabel from "../InputLabel";
import Loader from "./Loader";
import Suggestions from "../Suggestions";
import api from "../../api";
import { ICompanyModel } from "../../models";
import { SEARCH_PLACEHOLDERS } from "./SearchField.consts";

enum EDataState {
  INITIAL = "INITIAL",
  FETCHING = "FETCHING",
  FETCHED = "FETCHED",
  ERROR = "ERROR",
}

interface IProps
  extends Omit<InputHTMLAttributes<HTMLInputElement>, "onChange"> {
  label: string;
  required?: boolean;
  onChange?: (value: ICompanyModel) => void;
  searchByCompanyName?: boolean;
  onSelectForeignCompanyForm?: () => void;
}

const CompanySearch = ({
  label,
  required,
  onChange,
  searchByCompanyName,
  onSelectForeignCompanyForm,
  ...inputProps
}: IProps) => {
  const [value, setValue] = useState<string>(undefined);
  const [dataState, setDataState] = useState<EDataState>(EDataState.INITIAL);
  const [fetchedItems, setFetchedItems] = useState([]);
  const displaySuggestions = useMemo(
    () => !!fetchedItems.length && dataState !== EDataState.ERROR,
    [fetchedItems.length, value, dataState]
  );
  const uniqueId = uniqueString();

  const searchCompany = useMemo(
    () =>
      searchByCompanyName
        ? api.searchCompanyByName
        : api.searchCompanyByRegNumber,
    [searchByCompanyName]
  );

  const inputPlaceholder = useMemo(
    () =>
      searchByCompanyName
        ? SEARCH_PLACEHOLDERS.searchByName
        : SEARCH_PLACEHOLDERS.searchByRegNumber,
    [searchByCompanyName]
  );

  const handleSuggestionClick = (suggestion: ICompanyModel) => {
    setFetchedItems([]);
    onChange(suggestion);
  };

  const handleInputChange = (event: React.ChangeEvent<HTMLInputElement>) => {
    setValue(event.target.value);
  };

  useEffect(() => {
    if (value?.trim().length >= 3) {
      setDataState(EDataState.FETCHING);
      searchCompany(value)
        .then((companySearchResults) => {
          const currentDataState = isEmpty(companySearchResults)
            ? EDataState.ERROR
            : EDataState.FETCHED;

          setDataState(currentDataState);
          setFetchedItems(companySearchResults);
        })
        .catch(() => {
          setDataState(EDataState.ERROR);
        });
    } else {
      setFetchedItems([]);
      setDataState(EDataState.INITIAL);
    }
  }, [value]);

  useEffect(() => {
    setValue("");
  }, [searchByCompanyName]);

  return (
    <li className="gfield">
      <InputLabel fieldId={uniqueId} fieldIsRequired={required}>
        {label}
      </InputLabel>
      <div className="ginput_container ginput_container_text">
        <input
          type="text"
          value={value}
          onChange={handleInputChange}
          id={uniqueId}
          placeholder={inputPlaceholder}
          {...inputProps}
        />
        {dataState === EDataState.FETCHING && <Loader />}
        {displaySuggestions && (
          <Suggestions
            suggestions={fetchedItems}
            onChange={handleSuggestionClick}
            searchedValue={value}
          />
        )}
      </div>
      {dataState === EDataState.ERROR && (
        <div className="validation_message">
          Company not found, please try again or{" "}
          <ActionLink onClick={onSelectForeignCompanyForm}>
            enter your company details manually
          </ActionLink>
        </div>
      )}
    </li>
  );
};

export default memo(CompanySearch);
