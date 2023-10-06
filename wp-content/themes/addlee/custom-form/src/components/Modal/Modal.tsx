import React, { memo, useEffect } from "react";
import {
  initializeRequiredClassNames,
  removeRequiredClassNames,
} from "./Modal.utils";
import CloseButton from "./CloseButton";
import { StyledDarkenedBackground } from "./Modal.styles";

interface IProps {
  onClose?: () => void;
  children: React.ReactNode | React.ReactChildren;
}

const Modal = ({ onClose, children }: IProps) => {
  useEffect(() => {
    initializeRequiredClassNames();
    return () => removeRequiredClassNames();
  }, []);

  const handleOnClose = () => {
    onClose();
  };

  return (
    <div id="lightbox-content">
      <div className="lightbox-container animated fadeInUp">
        {children}
        <CloseButton onClick={onClose} />
      </div>
      <StyledDarkenedBackground onClick={handleOnClose} />
    </div>
  );
};

export default memo(Modal);
