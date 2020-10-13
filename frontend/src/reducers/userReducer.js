import { FIELD_VALUE } from '../action/user';
import { CLEAN_DATA, SUCCES_MESSAGE, ERROR_MESSAGE, CLOSE_ERROR_MESSAGE, CLOSE_SUCCES_MESSAGE } from '../action/push';

const initialState = {
  name: '',
  firstName: '',
  phone: '',
  mail: '',
  adress: '',
  message: '',
  snackSuccesMessage: false,
  snackErrorMessage: false,
};

const userReducer = (state = initialState, action = {}) => {
  switch (action.type) {
    case FIELD_VALUE:
      return {
        ...state,
        [action.inputName]: action.newValue,
      };

    case CLEAN_DATA:
      return {
        ...state,
        name: '',
        firstName: '',
        phone: '',
        mail: '',
        adress: '',
        message: '',
      };

    case SUCCES_MESSAGE:
      return {
        ...state,
        snackSuccesMessage: true,
      };

    case CLOSE_SUCCES_MESSAGE:
      return {
        ...state,
        snackSuccesMessage: false,
      };

    case ERROR_MESSAGE:
      return {
        ...state,
        snackErrorMessage: true,
      };

    case CLOSE_ERROR_MESSAGE:
      return {
        ...state,
        snackErrorMessage: false,
      };

    default: return state;
  }
};
export default userReducer;
