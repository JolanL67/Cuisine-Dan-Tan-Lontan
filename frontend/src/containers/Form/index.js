import { connect } from 'react-redux';
import Form from 'src/components/Form';
import { pushData } from '../../action/push';
import { fieldValue } from '../../action/user';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  cart: state.menu.cart,
  name: state.user.name,
  firstName: state.user.firstName,
  phone: state.user.phone,
  mail: state.user.mail,
  adress: state.user.adress,
  message: state.user.message,
});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
  pushData: () => {
    dispatch(pushData());
  },

  fieldValue: (newValue, inputName) => {
    dispatch(fieldValue(newValue, inputName));
  },
});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Form);
