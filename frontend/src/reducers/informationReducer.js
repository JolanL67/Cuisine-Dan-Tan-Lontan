import { SAVE_CONTACT, SAVE_PRESENTATION } from '../action/information';

const initialState = {
  presentation: '',
  loadingDescription: true,
  loadingContact: true,
  contact: [],
};

const menuReducer = (state = initialState, action = {}) => {
  switch (action.type) {
    case SAVE_PRESENTATION:
      return {
        ...state,
        presentation: action.description,
        loadingDescription: false,
      };
    case SAVE_CONTACT:
      return {
        ...state,
        contact: action.contact,
        loadingContact: false,
      };
    default: return state;
  }
};
export default menuReducer;
