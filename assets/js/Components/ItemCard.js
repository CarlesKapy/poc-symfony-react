import React from 'react';
import { Card, CardHeader, CardTitle, CardText } from 'material-ui/Card';

const ItemCard = ({ author, avatarUrl, book, subtitle, style, children }) => (
    <Card style={style}>
        <CardHeader title={book} avatar={avatarUrl} />
        <CardTitle title={book} subtitle={author} />
        <CardText>{children}</CardText>
    </Card>
);

export default ItemCard;