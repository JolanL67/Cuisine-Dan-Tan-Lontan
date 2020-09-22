import { SAVE_PRESENTATION } from '../action/information';

const initialState = {
  presentation: '',
  loading: true,
  contact: [],
};

const menuReducer = (state = initialState, action = {}) => {
  switch (action.type) {
    case SAVE_PRESENTATION:
      return {
        ...state,
        presentation: action.description,
        loading: false,
      };
    default: return state;
  }
};
export default menuReducer;
