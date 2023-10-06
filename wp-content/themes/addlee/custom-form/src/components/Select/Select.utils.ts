export const getElementHeight = (element?: HTMLElement) => {
  return element.offsetHeight;
};

export const getElementHeightOffset = (selectElement: HTMLElement) => {
  const selectedOption = selectElement.querySelector(
    ".selected"
  ) as HTMLElement;

  return selectedOption
    ? selectedOption.offsetTop + getElementHeight(selectedOption)
    : 0;
};

export const scrollSelectToTheSelectedOption = (selectElement: HTMLElement) => {
  const selectHeight = getElementHeight(selectElement);
  const distanceToScroll = getElementHeightOffset(selectElement) - selectHeight;
  const shouldScroll = distanceToScroll > 0;

  if (shouldScroll) {
    selectElement.scrollTop = distanceToScroll;
  }
};
