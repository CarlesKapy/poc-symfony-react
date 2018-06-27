import React from 'react';
import ReactDOM from 'react-dom';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';

import ItemCard from './Components/ItemCard';

class App extends React.Component {
    constructor() {
        super();

        this.state = {
            entries: []
        };
    }

    componentDidMount() {
        fetch('/data')
            .then(response => response.json())
            .then(entries => {
                this.setState({
                    entries
                });
            });
    }

    render() {
        return (
            <MuiThemeProvider>
                <div style={{ display: 'flex' }}>
                    {this.state.entries.map(
                        ({ id, author, avatarUrl, book, quote }) => (
                            <ItemCard
                                key={id}
                                author={author}
                                book={book}
                                avatarUrl={avatarUrl}
                                style={{ flex: 1, margin: 10 }}
                            >
                                {quote}
                            </ItemCard>
                        )
                    )}
                </div>
            </MuiThemeProvider>
        );
    }
}

ReactDOM.render(<App />, document.getElementById('root'));