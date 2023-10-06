import React, { memo } from "react";
import GetInTouchForm from "../../forms/GetInTouchForm";
import { useToggle } from "../../utils/custom-hooks.utils";
import ActionLink from "../ActionLink";
import { redirectToPage } from "../../utils";
import { SITE_PAGES } from "../../consts";

interface IProps {}

const GetInTouchButton = ({}: IProps) => {
  const [showForm, toggleShowForm, setShowForm] = useToggle();

  const handleFormToggle = () => {
    toggleShowForm();
  };

  const handleHideForm = () => {
    setShowForm(false);
  };

  const handleSubmit = () => {
    setShowForm(false);
    redirectToPage(SITE_PAGES.thankYou);
  };

  return (
    <div id="get-in-touch">
      <ActionLink onClick={handleFormToggle}>Get in touch</ActionLink>
      {showForm && (
        <GetInTouchForm onClose={handleHideForm} onSubmit={handleSubmit} />
      )}
    </div>
  );
};

export default memo(GetInTouchButton);
