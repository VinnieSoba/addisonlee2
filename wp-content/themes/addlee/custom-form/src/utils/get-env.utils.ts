import { TEnv } from "../types";

interface IEnvironment {
  name: TEnv;
  siteUrl: string;
}

export const ENVIRONMENTS: IEnvironment[] = [
  {
    name: "dev",
    siteUrl: "www.addisonleedeve.wpengine.com",
  },
  {
    name: "staging",
    siteUrl: "www.addisonleestag.wpengine.com",
  },
  {
    name: "prod",
    siteUrl: "www.addisonlee.com",
  },
];

export const getEnv = (): TEnv => {
  const siteUrl = window.location.href;
  const filteredEnv = ENVIRONMENTS.find((env) => siteUrl.includes(env.siteUrl));
  return filteredEnv?.name || "local";
};

export const isCurrentlyOnEnv = (env: TEnv) => {
  return getEnv() === env;
};
