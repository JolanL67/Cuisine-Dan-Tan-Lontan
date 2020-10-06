import { FIELD_VALUE } from '../action/user';

const initialState = {
  name: '',
  firstname: '',
  phone: '',
  mail: '',
  adress: '',
  message: '',
};

const userReducer = (state = initialState, action = {}) => {
  switch (action.type) {
    case FIELD_VALUE:
      return {
        ...state,
        [action.inputName]: action.newValue,
      };

    default: return state;
  }
};
export default userReducer;
