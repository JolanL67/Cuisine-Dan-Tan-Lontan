import { connect } from 'react-redux';
import Footer from 'src/components/Footer';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  contact: state.information.contact,
});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Footer);
