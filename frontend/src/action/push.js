export const PUSH_DATA = 'PUSH_DATA';
export const CLEAN_DATA = 'CLEAN_DATA';
export const SUCCES_MESSAGE = 'SUCCES_MESSAGE';
export const ERROR_MESSAGE = 'ERROR_MESSAGE';
export const CLOSE_SUCCES_MESSAGE = 'CLOSE_SUCCES_MESSAGE';
export const CLOSE_ERROR_MESSAGE = 'CLOSE_ERROR_MESSAGE';


export const cleanData = () => ({
  type: CLEAN_DATA,
});

export const pushData = () => ({
  type: PUSH_DATA,
});

export const succesMessage = () => ({
  type: SUCCES_MESSAGE,
});

export const errorMessage = () => ({
  type: ERROR_MESSAGE,
});

export const closeSuccesMessage = () => ({
  type: CLOSE_SUCCES_MESSAGE,
});

export const closeErrorMessage = () => ({
  type: CLOSE_ERROR_MESSAGE,
});