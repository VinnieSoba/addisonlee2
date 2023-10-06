import { ENV_VARIABLES } from "../consts";

export const API_CONFIG = {
  headers: {
    client_secret: ENV_VARIABLES.clientApiSecret,
    client_id: ENV_VARIABLES.clientApiId,
  },
};

export const FORM_SUBMISSION_HEADERS = {
  target_org: ENV_VARIABLES.targetOrg,
};
