export const sliceTextToLength = (text: string, maxLength: number) =>
  text.substring(0, maxLength);

export const redirectToPage = (page: string) => {
  window.location.href = page;
};
