import { MutableRefObject, useEffect, useCallback, useState } from "react";

export const useClickOutside = (
  ref: MutableRefObject<HTMLElement>,
  callback: Function
) => {
  const handleClick = (event: any) => {
    if (ref.current && !ref.current.contains(event.target)) {
      callback();
    }
  };

  useEffect(() => {
    document.addEventListener("click", handleClick);

    return () => {
      document.removeEventListener("click", handleClick);
    };
  });
};

export const useToggle = (initialValue = false) => {
  const [value, setValue] = useState<boolean>(initialValue);
  const toggleValue = useCallback(() => setValue((value) => !value), []);
  return [value, toggleValue, setValue] as const;
};

interface IError {
  type: string;
  message: string;
  path: string;
}

export const useYupValidationResolver = (validationSchema: any) =>
  useCallback(
    async (data) => {
      try {
        const values = await validationSchema.validate(data, {
          abortEarly: false,
        });

        return {
          values,
          errors: {},
        };
      } catch (errors) {
        return {
          values: {},
          errors: errors.inner.reduce(
            (allErrors: [IError], currentError: IError) => ({
              ...allErrors,
              [currentError.path]: {
                type: currentError.type ?? "validation",
                message: currentError.message,
              },
            }),
            {}
          ),
        };
      }
    },
    [validationSchema]
  );
