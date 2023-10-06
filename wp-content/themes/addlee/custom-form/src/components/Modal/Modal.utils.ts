import { REQUIRED_BODY_CLASS_NAME } from "./Modal.consts";

const getBodyElement = () => document.querySelector("body");

export const initializeRequiredClassNames = () =>
  getBodyElement()?.classList.add(REQUIRED_BODY_CLASS_NAME);

export const removeRequiredClassNames = () =>
  getBodyElement()?.classList.remove(REQUIRED_BODY_CLASS_NAME);
