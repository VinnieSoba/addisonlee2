import { ENV_VARIABLES } from "./env-variables.consts";

const ROUTES_ROOT_ADDRESS = `${ENV_VARIABLES.rootApiAddress}/api-web-forms/v1/api`;

export const ROUTES = {
  companySearch: `${ROUTES_ROOT_ADDRESS}/company`,
  getInTouchForm: `${ROUTES_ROOT_ADDRESS}/contact`,
  businessAccountForm: `${ROUTES_ROOT_ADDRESS}/business/account`,
};
