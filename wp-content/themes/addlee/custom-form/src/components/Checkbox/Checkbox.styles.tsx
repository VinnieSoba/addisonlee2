import styled, { css } from "styled-components";

interface ILabel {
  required?: boolean;
}

export const StyledLabel = styled.label<ILabel>`
  ${({ required }) =>
    required &&
    css`
      &::after {
        content: "*";
        position: absolute;
        left: 32px;
        top: -3px;
        font-size: 1.25rem;
        color: #c1ba97;
    }
      }
    `}
`;
