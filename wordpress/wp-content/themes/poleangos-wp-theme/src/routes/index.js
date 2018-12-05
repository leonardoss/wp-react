import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

import Posts from '../containers/Posts';
import Post from '../containers/Post';
import NotFound from '../containers/NotFound';
// import About from '../containers/About';

const Routes = () => (
  <Switch>
    <Route exact path="/" component={ Posts } />
    <Route path={PoleangosSettings.path + 'post/:slug'} component={Post} />
    {/* <Route exact path={PoleangosSettings.path + 'products'} component={Products} />
    <Route exact path={PoleangosSettings.path + 'products/:product'} component={Product} /> */}
    {/* <Route exact path={PoleangosSettings.path} component={ About } /> */}
    <Route component={ NotFound } />
  </Switch>
);

export default Routes;
