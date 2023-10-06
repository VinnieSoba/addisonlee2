import { IOption } from "../types";

export const TITLE_SELECT_OPTIONS: IOption[] = [
  {
    label: "- Select One -",
  },
  {
    value: "Mr.",
    label: "Mr.",
  },
  {
    value: "Miss.",
    label: "Miss.",
  },
  {
    value: "Ms.",
    label: "Ms.",
  },
  {
    value: "Mrs.",
    label: "Mrs.",
  },
  {
    value: "Dr.",
    label: "Dr.",
  },
  {
    value: "Prof.",
    label: "Prof.",
  },
];

export const DEFAULT_TITLE_SELECT_OPTION = TITLE_SELECT_OPTIONS[0];
