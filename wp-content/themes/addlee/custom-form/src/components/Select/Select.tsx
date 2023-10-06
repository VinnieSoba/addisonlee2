import React, { memo, useState, useRef, useMemo, useEffect } from "react";
import cn from "classnames";
import { IOption } from "../../types/IOption";
import SelectOption from "./SelectOption";
import { useClickOutside } from "../../utils";
import { scrollSelectToTheSelectedOption } from "./Select.utils";
import { StyledWrapepr } from "./Select.styles";

interface IProps {
  value?: string;
  options?: IOption[];
  onChange?: (optionValue?: string) => void;
  name?: string;
}

const Select = ({ value, options = [], onChange, name }: IProps) => {
  const selectRef = useRef(null);
  const [isOpened, setIsOpened] = useState(false);
  const selectContainerRef = useRef(null);

  const selectWrapperClassName = cn("sod_select focus", {
    open: isOpened,
  });

  const activeOption = useMemo(
    () => options.find((option) => option.value === value),
    [options, value]
  );

  const [hoveredOption, setHoveredOption] = useState(activeOption);

  const handleOutsideClick = () => {
    setIsOpened(false);
  };

  const handleClick = () => {
    setIsOpened(!isOpened);
  };

  const handleOptionClick = (option: IOption) => {
    const isCurrentlyActiveOption = option.value === activeOption.value;
    if (!isCurrentlyActiveOption) {
      onChange(option.value);
    }
  };

  const handleOptionMouseEnter = (option: IOption) => {
    const isCurrentlyHoveredOption = option.value === hoveredOption.value;
    if (!isCurrentlyHoveredOption) {
      setHoveredOption(option);
    }
  };

  useClickOutside(selectContainerRef, handleOutsideClick);

  useEffect(() => {
    if (isOpened) {
      scrollSelectToTheSelectedOption(selectRef.current);
    }
  }, [isOpened]);

  return (
    <StyledWrapepr
      className={selectWrapperClassName}
      onClick={handleClick}
      ref={selectContainerRef}
    >
      <span className="sod_label">{activeOption.label}</span>
      <span className="sod_list_wrapper">
        <span className="sod_list" ref={selectRef}>
          {options.map((option) => (
            <SelectOption
              onClick={handleOptionClick}
              value={option.value}
              label={option.label}
              activeOption={activeOption}
              isHovered={option.value === hoveredOption.value}
              onMouseEnter={handleOptionMouseEnter}
            />
          ))}
        </span>
      </span>
      <select
        className="medium gfield_select"
        value={activeOption.value}
        name={name}
      />
    </StyledWrapepr>
  );
};

export default memo(Select);
