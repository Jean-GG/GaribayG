const path = requiere('path');

module.exports = {
entry :'./src/index.js',
output: {
filename: 'bundle.js',
path: path.resolve(_dirname, 'dist'),
},
mode: 'production'
}