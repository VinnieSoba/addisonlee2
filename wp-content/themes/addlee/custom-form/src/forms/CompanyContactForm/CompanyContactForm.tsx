import React, { memo } from "react";
import { Control, Controller, UseFormRegister } from "react-hook-form";
import { Select } from "../../components";
import { ICompanyModel } from "../../models";
import { SELECT_VALUES } from "./CompanyContactForm.consts";

interface IProps {
  company?: ICompanyModel;
  fieldRegister: UseFormRegister<any>;
  formController: Control<any>;
}

const CompanyContactForm = ({
  company,
  fieldRegister,
  formController,
}: IProps) => {
  const disableEditingTextData = !company;

  return (
    <li className="gfield hide-label">
      <div className="ginput_complex ginput_container_address">
        {!disableEditingTextData && (
          <>
            <span>
              <input
                type="text"
                id="streetAddress"
                {...fieldRegister("streetAddress")}
              />
              <label htmlFor="streetAddress">Street address</label>
            </span>
            <span>
              <input type="text" id="city" {...fieldRegister("city")} />
              <label htmlFor="city">City</label>
            </span>
            <span>
              <input
                type="text"
                id="postalCode"
                {...fieldRegister("postalCode")}
              />
              <label htmlFor="postalCode">Zip / Postal code</label>
            </span>
          </>
        )}
        <span>
          <Controller
            control={formController}
            name="country"
            render={({ field: { onChange, value, name } }) => (
              <Select
                name={name}
                options={SELECT_VALUES}
                value={value}
                onChange={(value: string) => onChange(value)}
              />
            )}
          />
          <label>Country</label>
        </span>
        <div className="gf_clear gf_clear_complex"></div>
      </div>
    </li>
  );
};

export default memo(CompanyContactForm);
