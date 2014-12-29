"Basic stuff
filetype off
syntax on
set rtp+=~/.vim/bundle/vundle
call vundle#rc()
let mapleader=','
set t_Co=256
set background=dark
set cursorline
set nocompatible
syntax enable
filetype plugin indent on

"Bundles 
Plugin 'vim-airline'
Plugin 'xsbeats/vim-blade'
Plugin 'scrooloose/nerdtree'
Plugin 'mru.vim'
Plugin 'AutoClose'
Plugin 'The-NERD-Commenter'
Plugin 'surround.vim'
Plugin 'tacahiroy/ctrlp-funky'
Plugin 'ctrlp.vim'
Plugin 'snipMate'
Plugin 'Rename'
Plugin 'Syntastic'
Plugin 'joonty/vdebug.git'
Plugin 'nginx.vim'


"Bundle custom settings
let MRU_Max_Entries=20
let MRU_Max_Menu_Entries=10
let NERDTreeShowBookmarks=1
"let NERDTreeIgnore=['\.pyc','\~$','\.swo$','\.swp$','\.git','\.hg','\.svn','\.bzr']
let NERDTreeQuitOnOpen=1
let NERDTreeChDirMode=2
let NERDTreeMouseMode=2
let NERDTreeShowHidden=1
let NERDTreeKeepTreeInNewTab=1
"let g:airline_left_sep = '⮀'
"let g:airline_right_sep = '⮂'
let g:airline_left_sep = '▶'
let g:airline_right_sep = '◀'
let g:ctrlp_extensions = ['funky']
let g:airline_theme = "badwolf"
let g:ctrlp_funky_syntax_highlight = 1
let g:ctrlp_funky_nolim = 1
au BufRead,BufNewFile,FileType *.coffee set ft=coffee
au BufRead,BufNewFile,FileType *.rst set ft=php
au BufRead,BufNewFile,FileType *.md set ft=markdown
autocmd BufNewFile,BufRead *.blade.php set filetype=blade.php.html " Fix blade auto-indent
autocmd BufNewFile,BufRead *.jade set filetype=jade " Fix blade auto-indent

augroup ctrlp-funky
  au!
  au BufEnter ControlP setlocal number
augroup END

set backup
set noswapfile
set undofile
set backupdir=~/.vim/.vimbackup//
set directory=~/.vim/.vimswap//
set undodir=~/.vim/.vimundo//
set tags=./tags,tags;$HOME
set clipboard=unnamedplus
set incsearch
set showmatch
set smartcase
set ignorecase
set hlsearch
set hidden
set foldmethod=marker
set showcmd
set ruler
set visualbell noerrorbells t_vb=
set autowrite
set backspace=indent,eol,start
set number
set linebreak
set laststatus=2
set autoindent
set smartindent
set shiftwidth=4
set showmode
set virtualedit=onemore 
set expandtab                   
set tabstop=4                   
set softtabstop=4               
set shiftround
set timeout
set timeoutlen=300
set ttimeoutlen=100
set wildmenu
set wildmode=full

"mappings and my custom settings
colorscheme badwolf

imap jj <esc>
imap JJ <esc>
map Q <Nop>
nnoremap mm :MRU<esc>
nnoremap ne :NERDTreeToggle<esc>
"nnoremap ,cd :cd %:p:h<cr>:pwd<cr>
nnoremap j gj
nnoremap k gk
nnoremap sh :!
nnoremap so :source $MYVIMRC<esc>
nnoremap pp "*p<esc>
nnoremap :cd :cd %:p:h

"movement in insert mode
imap ,a <esc>A
imap ,i <esc>I
imap ,b <esc>bi
imap ,w <esc>wwi

map <C-f> :CtrlPFunky<esc>
"key for phpunit
nmap ,t :!clear && phpunit %<esc>
nmap co :!clear && gcc % && ./a.out<esc>
nmap cp :!clear && g++ % && ./a.out<esc>
"test one method
"nmap ,m yiw:!phpunit --filter ^R"^M^M<cr>

"key for php cli
nmap ,p :!clear && php %<cr>
"key for js-node
nmap ,n :!clear && node %<cr>
nmap vv ggVG
nmap ,w :w<esc> 
nnoremap <C-J> <C-W><C-J>
nnoremap <C-K> <C-W><C-K>
nnoremap <C-L> <C-W><C-L>
nnoremap <C-H> <C-W><C-H>
set splitbelow
set splitright
set mouse=a
set wrap


if has("autocmd")
     autocmd BufReadPost *
     \ if line("'\"") > 0 && line ("'\"") <= line("$") |
     \   exe "normal g`\"" |
     \ endif
endif


"Some experiments
"function example with input
"function! A()
    "let namespace = input("namespace name is: ")
    "let class = input("class name is: ")
    "let method = input("method name is: ")
    "exec "normal i" . namespace . class . method 
                    "\ method
"endfunction

"command for function calling
"command! C :call A()
"abbrev
"iabbrev id class
"autocommands
"autocmd FileType php syntax off

"go to last position in a file

"function! SetPhPOptions()
    "setlocal nonumber 
"endfunction


