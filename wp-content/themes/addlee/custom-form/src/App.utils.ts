import { redirectToPage } from "./utils";
import { SITE_PAGES } from "./consts";

export const redirectPageBasedOnRecomendation = (recommendation?: number) => {
  const redirectToPaymentMethodPage = recommendation === 1;
  const siteToRedirect = redirectToPaymentMethodPage
    ? SITE_PAGES.paymentMethods
    : SITE_PAGES.thankYou;

  redirectToPage(siteToRedirect);
};
