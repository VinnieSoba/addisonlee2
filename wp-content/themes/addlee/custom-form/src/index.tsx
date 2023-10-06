const { render } = (window as any).wp.element;
import * as React from "react";
import { App } from "./App";
const container = document.getElementById(`custom-form`);

if (container) {
  render(<App />, container);
  // Container has set static height, so that when the scripts loads, user doesn't get the flashing screen
  // After loading this custom styling is redundant, that's why it's being removed here
  container.removeAttribute("style");
}
