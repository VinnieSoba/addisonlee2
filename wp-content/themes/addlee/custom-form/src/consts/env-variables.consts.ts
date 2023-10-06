import { getEnv } from "../utils";

interface IEnvVariables {
  rootApiAddress: string;
  targetOrg: string;
  clientApiSecret: string;
  clientApiId: string;
}

export const ENV_VARIABLES: IEnvVariables = {
  local: {
    rootApiAddress: "https://dev.api.eu.addisonleeglobal.net",
    targetOrg: "00D0Q0000000cHI",
    clientApiSecret: "6Ea02ffa3AB74104aA3264bC08084B71",
    clientApiId: "7c8db86b1db2413c9ae322782de75c36",
  },
  dev: {
    rootApiAddress: "https://dev.api.eu.addisonleeglobal.net",
    targetOrg: "00D0Q0000000cHI",
    clientApiSecret: "6Ea02ffa3AB74104aA3264bC08084B71",
    clientApiId: "7c8db86b1db2413c9ae322782de75c36",
  },
  staging: {
    rootApiAddress: "https://sandbox.api.eu.addisonleeglobal.net",
    targetOrg: "00D5E0000001EVX",
    clientApiSecret: "6Ea02ffa3AB74104aA3264bC08084B71",
    clientApiId: "7c8db86b1db2413c9ae322782de75c36",
  },
  prod: {
    rootApiAddress: "https://api.eu.addisonleeglobal.net",
    targetOrg: "00Db0000000apMM",
    clientApiSecret: "6Ea02ffa3AB74104aA3264bC08084B71",
    clientApiId: "7c8db86b1db2413c9ae322782de75c36",
  },
}[getEnv()];
