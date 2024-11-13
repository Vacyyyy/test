CC = gcc
CFLAGS = -pedantic -Wall -Werror -std=c99
SRCDIR = src
TARGETDIR = target

ifeq ($(OS),Windows_NT)
  EXECUTABLE_EXT = .exe
else
  EXECUTABLE_EXT =
endif

SOURCES = $(wildcard $(SRCDIR)/*.c)
OBJECTS = $(patsubst $(SRCDIR)/%.c,$(TARGETDIR)/%.o,$(SOURCES))
EXECUTABLES = $(patsubst $(SRCDIR)/%.c,$(TARGETDIR)/%$(EXECUTABLE_EXT),$(SOURCES))

.PHONY: all clean

all: $(EXECUTABLES)

$(TARGETDIR)/%.o: $(SRCDIR)/%.c
	@mkdir -p $(TARGETDIR)
	$(CC) $(CFLAGS) -c $< -o $@

$(TARGETDIR)/%$(EXECUTABLE_EXT): $(TARGETDIR)/%.o
	@mkdir -p $(TARGETDIR)
	$(CC) $(CFLAGS) $< -o $@

clean:
	rm -rf $(TARGETDIR)
# testing smth
