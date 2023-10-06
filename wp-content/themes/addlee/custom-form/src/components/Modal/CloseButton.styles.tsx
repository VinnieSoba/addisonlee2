import styled from "styled-components";
import ActionLink from "../ActionLink";

export const StyledWrapper = styled(ActionLink)`
  display: block;
  position: absolute;
  margin: 0;
  top: 10px;
  right: 18px;
  z-index: 900;
  border-bottom: none;
  text-decoration: none;
  padding: 10px;
`;

export const StyledIcon = styled.span`
  font-size: 1.6rem;
  color: #494a43;
`;
