export const GET_PRESENTATION = 'GET_PRESENTATION';
export const SAVE_PRESENTATION = 'SAVE_PRESENTATION';


export const getPresentation = () => ({
  type: GET_PRESENTATION,
});

export const savePresentation = (description) => ({
  type: SAVE_PRESENTATION,
  description,
});
