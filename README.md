Deobfuscated DemonHunter Exploit Kit
====================================

**Legal disclaimer**: I did not write the source code, merely made it readable.
I discourage the use of the software contained within this repository. Any usage
will be your own responsibility. I cannot, and will not be held liable for your
actions.

### Directories:
  * deobed/ - Contains the deobfuscated
      source code.
  * tools/ - Contains deob.php which
      I used to deobfuscate the source code.

**NOTE**: There are mistakes in the source which I noticed, and preserved. Such as the
source code in file deobed/modules/Adobe-2008-2992.php being the same as the code in the
file deobed/download_file.php. Some mistakes I did not preserver such as opening a block of
PHP code with: ?> rather than <?php.
