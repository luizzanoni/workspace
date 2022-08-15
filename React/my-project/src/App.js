import logo from './logo.svg';
import './App.css';

function App() {
  const name = 'luiz'

  const newName = name.toUpperCase()


  return (
    <div className="App">
      <h1>Olá React!</h1>
      <p>Meu primeiro APP</p>
      <p>Olá, {newName}</p>
    </div>
  );
}

export default App;
