import React from 'react';
import { Switch, Route } from 'react-router-dom';

import Posts from '../containers/Posts';
import NotFound from '../containers/NotFound';
import About from '../containers/About';

const Routes = () => (
  <Switch>
    <Route exact path="/" component={ Posts } />
    <Route exact path={PoleangosSettings.path} component={ About } />
    <Route component={ NotFound } />
  </Switch>
);

export default Routes;
