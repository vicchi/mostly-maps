# Mostly Maps is a child theme for the Frank WordPress theme. As seen at www.vicchi.org

## Customising Mostly Maps

### You Need Ruby and Ruby Gems Installed

If you're running on a Mac, you should already have this, but ensure that you have the
`gem` binary directory in your `$PATH` definition in your `.bash_profile`

```bash
PATH=$(brew --prefix ruby)/bin:$PATH
export PATH
```

### Install [Sass](http://sass-lang.com/)

```bash
$ gem install sass
$ gem install rb-fsevent
```

### Install [Compass](http://compass-style.org/install)

```bash
$ gem install compass
```

### Install [CoffeeScript](http://coffeescript.org/)

```bash
$ npm install -g coffee-script
```

Install [Juicer](http://cjohansen.no/en/ruby/juicer_a_css_and_javascript_packaging_tool)

```bash
$ gem install juicer
$ juicer install closure_compiler
```

### Watch For SCSS And CoffeeScript Changes

```bash
$ ./build/watch.sh
```

### Update The Main JS File

```bash
$ ./build/build.sh
```