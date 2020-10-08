export const GET_PRESENTATION = 'GET_PRESENTATION';
export const SAVE_PRESENTATION = 'SAVE_PRESENTATION';
export const GET_CONTACT = 'GET_CONTACT';
export const SAVE_CONTACT = 'SAVE_CONTACT';
export const HIDE_LOADER = 'HIDE_LOADER';

export const hideLoader = () => ({
  type: HIDE_LOADER,
});

export const getPresentation = () => ({
  type: GET_PRESENTATION,
});

export const savePresentation = (description) => ({
  type: SAVE_PRESENTATION,
  description,
});

export const getContact = () => ({
  type: GET_CONTACT,
});

export const saveContact = (contact) => ({
  type: SAVE_CONTACT,
  contact,
});
