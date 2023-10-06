import React, { memo, useMemo, useState } from "react";
import { IOption } from "../../types";
import cn from "classnames";

interface IProps extends IOption {
  onClick: (option: IOption) => void;
  activeOption: IOption;
  onMouseEnter: (option: IOption) => void;
  isHovered: boolean;
}

const SelectOption = ({
  value,
  label,
  activeOption,
  onClick,
  onMouseEnter,
  isHovered,
}: IProps) => {
  const currentOption = useMemo(
    () => ({
      value,
      label,
    }),
    [value, label]
  );

  const isActiveOption = useMemo(() => activeOption.value === value, [
    activeOption.value,
  ]);

  const optionClassName = cn("sod_option", {
    active: isHovered,
    selected: isActiveOption,
  });

  const handleClick = () => {
    onClick(currentOption);
  };

  const handleMouseEnter = () => {
    onMouseEnter(currentOption);
  };

  return (
    <span
      className={optionClassName}
      onClick={handleClick}
      onMouseEnter={handleMouseEnter}
    >
      {label}
    </span>
  );
};

export default memo(SelectOption);
